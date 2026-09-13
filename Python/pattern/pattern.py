print("pattern 1:") 
# * * * * 
# * * * * 
# * * * * 
for r in range(1,4):
    for c in range(1,5):
        print('*',end=" ")
    print()

print("pattern 2:") 
# * 
# * * 
# * * * 
# * * * * 
for r in range(1,5):
    for c in range(1,r+1):
        print('*',end=" ")
    print()

for r in range(1,4):
    for s in range(1,4-r):
        print(end="  ")
    for c1 in range(4-r,4):
        print("*", end=" ")
    for c2 in range(4,8-r):
        print("*", end=" ")
    print()

row = int(input("enter no of rows: "))

for r in range(1,row+1):
    for s in range(1,(row+1)-r):
        print(end="  ")
    for c1 in range((row+1)-r,(row+1)):
        print("*", end=" ")
    for c2 in range((row+1),((row+1)*2)-r):
        print("*", end=" ")
    print()
