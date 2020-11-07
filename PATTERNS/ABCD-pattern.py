l = ["A","B","C","D","E","F","G"]
for n in range(len(l)):
	r = 0
	a = len(l)-2
	for i in range(len(l)):
		print(l[i], end = " ")
		if i == len(l)-1 or r == 1:
			r = 1
			for j in range(len(l)):
				print(l[a], end= " ")
				a = a - 1
				if a == -1:
					break
	print(" ")
	l[(len(l)-1)-n] = " "