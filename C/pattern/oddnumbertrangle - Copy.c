#include<stdio.h>
int main ()
{
    int i,j,n;
    printf("\n Enter no. of line: ");
    scanf("%d",&n);
    for (i=1;i<=n;i+=2)
    {
        for (j=1;j<=i;j+=2)
        {
            printf("%d ",j);
        }
        printf("\n");
    }
    return 0;
}