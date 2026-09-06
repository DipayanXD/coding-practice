#include<stdio.h>
#include<conio.h>
void main()
{
	int n,i,f=1;
	printf("Enter a number:");
	scanf("%d",&n);
	for(i=2;i<=n;i++){
		f*=i;
	}
	printf("\nFactorial of a %d is %d",n,f);
}

