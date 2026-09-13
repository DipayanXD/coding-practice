sub1 = int(input("Enter the first subject marks: "))
sub2 = int(input("Enter the second subject marks: "))
sub3 = int(input("Enter the third subject marks: "))
sub4 = int(input("Enter the fourth subject marks: "))
sub5 = int(input("Enter the fifth subject marks: "))

total = sub1 + sub2 + sub3 + sub4 + sub5
avg = total / 5

if avg >= 90:
    print("Grade: AA")

elif avg >= 80:
    print("Grade: A+")

elif avg >= 70:
    print("Grade: A")

elif avg >= 60:
    print("Grade: B")

elif avg >= 50:
    print("Grade: C")

elif avg < 50:
    print("You are failed")

