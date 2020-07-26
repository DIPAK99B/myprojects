t = 1
c = 1
h = ["0","1","2","3","4","5","6","7","8","9"]
a = [0,1,2,3,4,5,6,7,8,9]
while t<=3:
	t = t + 1
	i = 1
	while i<=3:
		print(a[int(h[c])],end=" ")
		i = i + 1
		c = c + 1
		if i<=3:
			print("|",end=" ")
		elif t<=3:
			print("\n--+---+--")
