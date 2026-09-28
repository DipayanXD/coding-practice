#include<stdio.h>
int fact(int i){
	if(i==0){
		return 0;
	}
	if(i==1){
		return 1;
	}
	return fact(i-1) + fact(i-2);
}

int main(){
	int n,i;
	printf("Enter Number of terms: ");
	scanf("%d",&n);
	for (i=0;i<n;i++){
		printf("%d\t",fact(i));
	}
	return 0;
}
