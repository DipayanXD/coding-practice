#include<stdio.h>
int main ()
{
    int i,j,n;
    printf("\n Enter no. of line (ONLY USE ODD NUMBER) : ");
    scanf("%d",&n);
    if (n%2==0)
    {
        printf("\n Please enter odd number to print the pattern");
    }
    else
    {
        for (i=1;i<=n;i++)
        {
            for (j=1;j<=n;j++)
            {
                int a = n/2+1;
                if (i == a || j == a)
                {
                    printf(" * ");
                }
                else
                {
                    printf("   ");
                }
            }
            printf("\n");
        }

    }
    return 0;
}
