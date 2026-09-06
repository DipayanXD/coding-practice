#include<stdio.h>
#include<conio.h>
void main(){
	int n,m,dig,rev=0;
	printf("Enter a Number: ");
	scanf("%d",&n);
	m=n;
	while(m!=0){
		dig=m%10;
		rev=rev*10+dig;
		m/=10;
	}
	if(rev==n){
		printf("Number is palindrome");
	}
	else{
		printf("Number is not palindrome");
	}
	getch();
}
