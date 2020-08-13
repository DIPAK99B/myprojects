#CODE WRITTEN BY DIPAK S BANSODE
#this is a small program to calculate the
#interest which you will get after fix
#deposit at 7% rate and also 
#the diffrence between normal return and
#coumpunding return
t = int(input("Enter total value= "))
n = int(input("Total no. of years= "))
z = t
k = (((t*7)/100)*n)+t
for i in range(n):
	f = (t*7)/100
	t = t+f
	print(i)
	print(f)
	print(t)
#for i in range(n):
#	f = (t*7)/100
#	h = f * n
#	u = h + t
print("VALUE= ",z)
print("TOTAL= ",int(t))
print("TOTAL PROFIT= ",int(t-z))
print("without compounding= ",int(k))
print("without P&L= ",int(k-z))
print("LOSS= ",int(t-k))