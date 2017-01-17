import datetime

d0 = datetime.date.today()
day = int(input("Please enter the day: "))
month = int(input("Please enter the month:"))
year = int(input("Please enter the year: "))

d0 = datetime.date(year,month,day)
d1 = datetime.date.today()
difference = d0 - d1
print difference.days
