#include<stdio.h>
#include<conio.h>
int main()
{
	int arr[3][4],i,j,sumR,sumC;
	// input
	for(i=0;i<3;i++){
		for(j=0;j<4;j++){
			printf("Enter value of arr[%d][%d]: ",i,j);
			scanf("%d",&arr[i][j]);
			printf("\n");
		}
	}
	// printing the array
	for(i=0;i<3;i++){
		for(j=0;j<4;j++){
			printf("%d\t",arr[i][j]);
		}
		printf("\n");
	}
	// calculate the sum of row
	for(i=0;i<3;i++){
		sumR=0;
		for(j=0;j<4;j++){
			sumR+=arr[i][j];	
		}
		printf("sum of row %d: %d",i+1,sumR);
		printf("\n");	
	}
	// calculate the sum of column
	for(i=0;i<4;i++){
		sumC=0;
		for(j=0;j<3;j++){
			sumC+=arr[j][i];
		}
		printf("Sum of column %d: %d",i+1,sumC);
		printf("\n");
	}
	return 0;
}
