#include<stdio.h>
#include<conio.h>
void main()
{
	int n,d,s=0,a;
	printf("Enter a number to check perfect number: ");
	scanf("%d",&n);
	a=n;
	while(a!=0){
		d=a%10;
		a/=10;
		s+=(d*d*d);
	}
	if(s==n){
		printf("Number is Armstrong");
	}
	else{
		printf("Number is not Armstrong");
	}
	getch();
}

