 #include<stdio.h>
int main ()
 {
	int a,b,t;
	printf("\nEnter 1st num:");
	scanf("%d",&a);
	printf("\nEnter 2nd num:");
	scanf("%d",&b);
	t=a; a=b; b=a;
	printf("\nAfter swapping 1st number is %d and 2nd number is %d",a,b);
 }
