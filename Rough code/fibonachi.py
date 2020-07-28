# def f(n):
#     if n == 0 :
#         return 0
#     elif n == 1:
#         return 1
#     else:
#         return f(n-1)+f(n-2)
# print(f(6))
z = 7
first = 0
second = 1
temp = 0
for i in range(z):
    temp = first + second
    second = first
    first = temp
    print(first)