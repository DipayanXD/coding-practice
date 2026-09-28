#include <stdio.h>
#include <string.h>

int main() {
    char sir[4];
    printf("IS YOUR TEACHER AT IN YOUR CLASSROOM? (YES/NO) ");
    scanf("%3s", sir);

    if (strcmp(sir, "YES") == 0) {
        printf("YOUR CLASS HAVE BEEN TAKEN BY YOUR SIR!!\n");
    } else if (strcmp(sir, "NO") == 0) {
        printf("SIR ASBE NAH SIR MOVIE DEKHTE GECHHE\n");
    } else {
        printf("WHY ARE YOU IN COLLEGE?!\n");
    }

    return 0;
}
