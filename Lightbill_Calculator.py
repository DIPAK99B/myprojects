u = int(input("Enter Units = "))
v = 0
if u <= 100:
	v = v + (u*3.46)
elif u <= 300:
	a = u - 100
	v = v + (a*7.43)+346	
elif u <= 500:
	a = u - 300
	v = v + (a*10.32)+346
elif u > 500:
	a = u - 500
	v = v + (a*11.71)+346	
v = round(v, 2)
print()
print(" Constant Cost = 100")
print("Light Cost = ",v)
print("Transfer Cost = ",u*1.45)
z = round(100+v+(u*1.45),2)
p = round((z*0.16),2)
print("16% = ",p)
t = z + p
print("Total = ",t)