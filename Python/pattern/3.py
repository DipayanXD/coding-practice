for r in range (1,6):
    for c in range(1,r+1):
        print(c%2,end=" ")
    print()
#output:
# 1 
# 1 0 
# 1 0 1 
# 1 0 1 0 
# 1 0 1 0 1 

for r in range (1,4):
    for s in range(1,4-r):
        print(end="  ")
    for c in range(1,r*2):
        print(c,end=" ")
    print()
# output:
#     1
#   1 2 3
# 1 2 3 4 5

for r in range (1,5):
    for s in range(1,5-r):
        print(end="  ")
    for c in range(1,r+1):
        print(c,end=" ")
    print()
# output: 
#       1
#     1 2
#   1 2 3
# 1 2 3 4

for r in range (1,5):
    for s in range(1,5-r):
        print(end="  ")
    for c1 in range(r,0,-1):
        print(c1,end=" ")
    for c2 in range(2,r+1):
        print(c2,end=" ")
    print()
# output:
#       1
#     2 1 2
#   3 2 1 2 3
# 4 3 2 1 2 3 4