#Health Managment System using Python CODED BY DEEPAK BANSODE
def getdate():
    """This function is ued to get time and date"""
    import datetime
    return datetime.datetime.now()

def w_diet(n):
    """This function is used to write inside diet section of user N"""
    with open(n,"a") as f:
        q = str(getdate())
        t = input("Enter what you ate")
        f.write(q+"\n"+t+"\n")
    main()

def w_exercise(n):
    """This function is used to write inside exercise section of user N"""
    with open(n, "a") as f:
        q = str(getdate())
        t = input("Enter what you exercised")
        f.write(q + "\n" + t + "\n")
    main()

def r_diet(e):
    """This function is used to read inside diet section of user N"""
    with open(e,"r+") as f:
        print(f.readlines())
    main()

def r_exercise(e):
    """This function is used to read inside exercise section of user N"""
    with open(e,"r+") as f:
        print(f.readlines())
    main()

def writte():
    """This function is used to write inside file"""
    c = int(input("press 1 for Deepak , press 2 for Anup , press 3 for Ashish\n"))
    if c==1:
        n = "Deepak.txt"
        e = "E_Deepak.txt"
        c = int(input("for Diet(1), for exercise(2)\n"))
        if c == 1:
            w_diet(n)
        elif c == 2:
            w_exercise(e)
        else:
            t = int(input("press 1 to try again press 0 to exit\n"))
            if t == 1:
                exit()
            writte()
    elif c==2:
        n = "Anup.txt"
        e = "E_Anup.txt"
        c = int(input("for Diet(1), for exercise(2)\n"))
        if c == 1:
            w_diet(n)
        elif c == 2:
            w_exercise(e)
        else:
            t = int(input("press 1 to try again press 0 to exit\n"))
            if t == 1:
                exit()
            writte()
    elif c==3:
        n = "Ashish.txt"
        e = "E_Ashish.txt"
        c = int(input("for Diet(1), for exercise(2)\n"))
        if c == 1:
            w_diet(n)
        elif c == 2:
            w_exercise(e)
        else:
            t = int(input("press 1 to try again press 0 to exit\n"))
            if t == 1:
                exit()
            writte()
    else:
        print("Person dont exist\n")

def reead():
    """This function is used to retrive data from file"""
    c = int(input("press 1 for Deepak , press 2 for Anup , press 3 for Ashish\n"))
    if c == 1:
        n = "Deepak.txt"
        e = "E_Deepak.txt"
        c = int(input("for Diet(1), for exercise(2)\n"))
        if c == 1:
            r_diet(n)
        elif c == 2:
            r_exercise(e)
        else:
            t = int(input("press 1 to try again press 0 to exit\n"))
            if t == 1:
                exit()
            writte()
    elif c == 2:
        n = "Anup.txt"
        e = "E_Anup.txt"
        c = int(input("for Diet(1), for exercise(2)\n"))
        if c == 1:
            r_diet(n)
        elif c == 2:
            r_exercise(e)
        else:
            t = int(input("press 1 to try again press 0 to exit\n"))
            if t == 1:
                exit()
            writte()
    elif c == 3:
        n = "Ashish.txt"
        e = "E_Ashish.txt"
        c = int(input("for Diet(1), for exercise(2)\n"))
        if c == 1:
            r_diet(n)
        elif c == 2:
            r_exercise(e)
        else:
            t = int(input("press 1 to try again press 0 to exit\n"))
            if t == 1:
                exit()
            writte()
    else:
        print("Person dont exist\n")

def main():
    """MAIN FUNCTION"""
    d = int(input("Do you want to WRITE DATA(1) or READ(2). to exit press (0)\n"))
    if d == 1:
        writte()
    elif d == 2:
        reead()
    elif d == 0:
        exit()
    else:
        print("TRY AGAIN, PRESS 1 OR 2 \n")
        main()
main()