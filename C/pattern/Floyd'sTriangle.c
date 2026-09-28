#include<stdio.h>
void main()
{
    int n,a,i,j;
    printf("Enter no. of line: ");
    scanf("%d",&n);
    a = 1;
    for(i=1;i<=n;i++)
    {
        for(j=1;j<=i;j++)
        {
            printf("%d ",a);
            a++;
        }
        printf("\n");
    }
}
