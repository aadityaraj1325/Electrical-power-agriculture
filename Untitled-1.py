# n = int(input("Enter the number of terms: "))
 
# current_term = 1
# common_difference = 2
# end_term = current_term + (n-1)*common_difference
# print("\nAP:", end = " ")
# for _ in range(current_term, end_term, common_difference):
#     print(current_term, end=", ")
#     current_term += common_difference
# print(current_term)

# n=int(input("Enter a number: "))
# for i in range(n):
#     for j in range(1, n + 1):
#         print(j, end="")
#     print()

# n=int(input())
# i=0
# for i in range(1,n+1):
#     print("*"*i)


# n=int(input())
# i=0
# for i in range(1,n+1):
#     for j in range(1,i+1):
#         print(j,end="")
#     print()

# n=int(input("Enter a number: "))
# for i in range(1,n+1):
#     print("."*(n-i),end="")
#     for j in range(1,i+1):
#         print(j,end=" ")
#     print()

    

# n=int(input("Enter a number: "))
# for i in range(2,n,2):
#     print(i)

 
# current_term = 1
# common_difference = 2
# end_term = current_term + (n-1)*common_difference
# print("\nAP:", end = " ")
# for _ in range(current_term, end_term, common_difference):
#     print(current_term, end=", ")
#     current_term += common_difference
# print(current_term)


# # pyramid type star 
# n=int(input("Enter a number: "))
# for i in range(n):
#     for j in range(n-i-1):
#         print(" ",end="")
#     for j in range(i+1):
#         print("*",end=" ")
#     print()

# def printVowels(string):
#     for char in string:
#         if char in "aeiouAEIOU":
#             print(char)
#     return char

# # take input
# string = input('Enter any string: ')

# # calling function
# printVowels(string)

# def count_vowels(input_string):
#     vowels = "aeiouAEIOU"
#     vowel_count = 0
#     for char in input_string:
#         if char in vowels:
#             vowel_count += 1
#     return vowel_count

# user_input = input("Enter a string: ")
# print("Number of vowels in the input string:", count_vowels(user_input))
# x=input()
# sum=''
# for i in x:
#     for j in range(1,len(x)+1):
#         if x.index(i)==j-1:
#             y=i*j
#             sum+=y
# print(sum)
# a=input()
# b=int(input())
# c=list(a)
# d=c.remove("y")
# print(e)
# if a.find(b) != -1:
#     print(b)
# else:
#     print(a)

# a=int(input())
# for i in range(1,a+1):
#     print(" "*(a-i),end='')
#     for j in range(1,i+1):
#         print(j,end=" ")
#     print()
a=int(input("n = "))
print("***** \n"*a,end="")
