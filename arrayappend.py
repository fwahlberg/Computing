######################
#Initialise Variables
######################
numbers = []
output = 0
######################
#Iteration
######################
for _ in range(20): #Begin for loop for range 20
    i = int(input("Please enter number " + str(_+1)+ ": "))  #Assign
    numbers.append(i)
    output += i
######################
#Output preparation
######################
printoutput = str(numbers)
printoutput = printoutput.replace(",","+").replace("[","").replace(" ","").replace("]","=")
print(printoutput)
print(output)
