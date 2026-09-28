#include<stdio.h>
int main()
{
	int a,b, add,sub,mul;float div;
	printf("Enter 1st value:");
	scanf("%d",&a);
	printf("Enter 2nd value:");
	scanf("%d",&b);
	add=a+b;
	sub=a-b;
	mul=a*b;
	div=(float)a/(float)b;
	printf("\nResult of %d + %d = %d",a,b,add);
	printf("\nResult of %d - %d = %d",a,b,sub);
	printf("\nResult of %d * %d = %d",a,b,mul);
	printf("\nResult of %d / %d = %f",a,b,(float)div);
	return 0;	
}
