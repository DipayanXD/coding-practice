#include<stdio.h>
int main()
{
    int n,a,i,j;
    printf("Enter no. of line: ");
    scanf("%d",&n);
    a = n;
    for(i=1;i<=n;i++)
    {
        for(j=1;j<=i;j++)
        {
            printf("%d",a);
            a++;
        }
        printf("\n");
    }
    return 0;
}