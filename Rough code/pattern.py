z = int(input("Enter no or rows"))
b = int(input("Enter 1 or 0"))
i = 1
j = 1
if b == True:
    for i in range(z+1):
        for j in range(i):
            print("*",end="")
        print("")
if b == False:
    for i in range(z+1):
        for j in range(z):
            print("*",end="")
        print("")
        z = z - 1
input("Press any ket to exit")