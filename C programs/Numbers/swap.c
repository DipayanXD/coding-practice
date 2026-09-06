 #include<stdio.h>
int main ()
 {
	int a,b;
	printf("\nEnter 1st num:");
	scanf("%d",&a);
	printf("\nEnter 2nd num:");
	scanf("%d",&b);
	a=a+b; b=a-b; a=a-b;
	printf("\nAfter swapping 1st number is: %d and 2nd number is %d",a,b);
 }
