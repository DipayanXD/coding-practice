#include<stdio.h>
#include<conio.h>
void main()
{
	int n,t1=0,t2=1,next=0;
	printf("Enter a Number: ");
	scanf("%d",&n);
	printf("Fibonacci sequence : %d,%d",t1,t2);
	next=t1+t2;
	while(next<=n){
		printf(",%d",next);
		t1=t2;
		t2=next;
		next = t1+t2;
	}
	getch();
}

