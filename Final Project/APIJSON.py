
#The MIT License (MIT)

#Copyright (c) [2014] [Benjamin Andrew Brown]

#Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

#The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

#THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THEAUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

#Imports the library necessary to query information from websites.
import urllib2
#Imports the library required to format the XBOX LIVE API data into a more readable format.
import json
#Imports the library required to launch and format MS Office applications.
import win32com.client
#Imports two libraries necessary to translate special characters (trademark, copyright, etc.) into a font the PowerShell can read in order to execute the program.
import codecs, sys

import smtplib
from email.MIMEMultipart import MIMEMultipart
from email.MIMEBase import MIMEBase
from email.MIMEText import MIMEText
from email import Encoders
import os

def mail(to, subject, text, attach):
   msg = MIMEMultipart()

   msg['From'] = 'benjamin.andrew2013@gmail.com'
   msg['To'] = "To: "
   msg['Subject'] = subject

   msg.attach(MIMEText(text))

   part = MIMEBase('application', 'octet-stream')
   part.set_payload(open(attach, 'rb').read())
   Encoders.encode_base64(part)
   part.add_header('Content-Disposition',
           'attachment; filename="%s"' % os.path.basename(attach))
   msg.attach(part)
   gmail_name = "benjamin.andrew2013@gmail.com"
   mailServer = smtplib.SMTP("smtp.gmail.com", 587)
   #mailServer = smtplib.SMTP_SSL("smtp.gmail.com", 465)   # didn't work for me
   mailServer.ehlo()
   mailServer.starttls()
   mailServer.ehlo()
   mailServer.login("benjamin.andrew2013@gmail.com", "Mason2012")
   #mailServer.sendmail(gmail_user, to, msg.as_string())   # just e-mail address in the From: field
   mailServer.sendmail(gmail_name, to, msg.as_string())   # name + e-mail address in the From: field
   # Should be mailServer.quit(), but that crashes...
   mailServer.close()

#Establishes special character translation variable.
sys.stdout = codecs.getwriter('UTF-8')(sys.stdout)
#Assigns 'handle' to the input given by the user.
handle = raw_input ("Please enter your XBOX LIVE Gamertag >> ")
#Passes the information that will be retrieved from the URL below into the 'response' variable.  The Gamertag entered at the above prompt is passed into the '%s' place holder at the end of the web address. 
response = urllib2.urlopen("https://xboxapi.com/games/%s" % handle)
#Formats the API data from the above URL into JSON format and passes it into the 'json_data' variable. 
json_data = json.load(response)

#Launches or connects to Microsoft Excel.
x = win32com.client.Dispatch("Excel.Application.15")

#Opens excel and keeps it open after spreadsheet population.  
x.Visible = 1

#Opens a workbook to be written to.
x.Workbooks.Add()
book = x.Workbooks.Add()

#The two lines below format the column width to the desired pixel size.  When establishing a range of cells to format, '.Range()' and a string literal of the cells to be formatted are accepted...  Users will see a numbered vertical column on the left of the sheet, and an alphabetical column running horizontally at the top of the sheet.  When formatting individual cells as seen in the three code lines below 'x.Range()', only numerical values are accepted.  The vertical number column information is taken at face value.  The horizontal (alphabetical) column is described as: A=1, B=2, C=3, et cetera.  This could be because the excel alphabet moving to AA, BB, CC, et cetera after 'Z' is reached.  
x.Range("A:A").ColumnWidth = 20
x.Range("B:B").ColumnWidth = 15

#Writes the strings below into the selected cells.  Numerical values are accepted for cell identification when single cells are being described/written. 
x.Cells(1,1).Value = "Gamertag"
x.Cells(2,1).Value = "Gamer Score"
x.Cells(3,1).Value = "Game Count"

#Lines 30-33 inserts specified information retrieved from 'json.load(response)' called in line 9.
x.Cells(1,2).Value = handle
x.Cells(2,2).Value = json_data['Player']['Gamerscore']
x.Cells(3,2).Value = json_data['Player']['GameCount']

#Counts the number of games stored in the 'json_data[]' file.
numgames = json_data['Player']['GameCount']

#Lines 38 & 39 establish the colum widths for the specified ranges for aesthetic purposes. 
x.Range("F:I").ColumnWidth = 22
x.Range("J:J").ColumnWidth = 15

#Assigns the strings below as titles in the spredsheet. 
x.Cells(1,6).Value = "Title"
x.Cells(1,7).Value = "Possible Score"
x.Cells(1,8).Value = "Possible Achievements"
x.Cells(1,9).Value = "Achievements"
x.Cells(1,10).Value = "Score"

#These variables prime the while loop below for populating the spreadsheet. 
row = 2
game = 0

#Populates the spreadsheet.
while game < numgames:
	
	#Populates a single games information starting with the first game in the range 
	x.Cells(row,6).Value = json_data['Games'][game]['Name']
	x.Cells(row,7).Value = json_data['Games'][game]['PossibleScore']
	x.Cells(row,8).Value = json_data['Games'][game]['PossibleAchievements']
	x.Cells(row,9).Value = json_data['Games'][game]['Progress']['Achievements']
	if json_data['Games'][game]['PossibleScore'] > 0:
		x.Cells(row,10).Value = json_data['Games'][game]['Progress']['Score']
	row = row + 1
	game = game + 1
	
# ... To Be Continued ... (With a more aesthetically pleasing format and... AND EMAIL!!!!)

###Save it here###
book.SaveAs("C:\Users\Ben\Desktop\TestRun.xlsx")
x.Quit()

to = raw_input ("To: ") 
mail(to,
       "Is the gamer report in here?",
	   "It should be.",
              "C:\Python27\!!!FINAL!!!\APIJSON.py")

