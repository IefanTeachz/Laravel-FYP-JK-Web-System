import pandas as pd
from urllib.request import urlopen
from bs4 import BeautifulSoup
import mysql.connector


all_quotes = []
for i in range(1, 11):
    url = f'https://quotes.toscrape.com/tag/love/'
    page = urlopen(url)
    soup = BeautifulSoup(page, 'html.parser')
    quotes = soup.find_all('div', class_='quote')

    for quote in quotes:
        text = quote.find('span', class_='text').text
        author = quote.find('small', class_='author').text

        single_quote = [text, author]
        all_quotes.append(single_quote)


#establishing the connection
conn = mysql.connector.connect(
   user='fnfmxqvaztrhgl', password='a58fa11d14433e785fbad0650e7b0e5429315cf930bb223ca4ae71c2f5bad26c', host='ec2-44-206-11-200.compute-1.amazonaws.com', database='d9ggntc86b5i7u')

#Creating a cursor object using the cursor() method
cursor = conn.cursor()

# Preparing SQL query to INSERT a record into the database.
insert_stmt = (
   "INSERT INTO qoute(QUOTE, AUTHOR)"
   "VALUES (%s, %s)"
)

records_to_insert = all_quotes

try:
   # Executing the SQL command
   cursor.executemany(insert_stmt, records_to_insert)
   
   # Commit your changes in the database
   conn.commit()

except:
   # Rolling back in case of error
   conn.rollback()

print("Data inserted")

# Closing the connection
conn.close()



