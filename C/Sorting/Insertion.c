#include <stdio.h>

// void InsertionSort(int a[], int size) {
//   int i, j;
//   for (i = 1; i < size; i++) {
//     int temp = a[i];
//     j = i - 1;
//     while (j >= 0 && a[j] > temp) {
//       a[j + 1] = a[j];
//       j--;
//     }
//     a[j + 1] = temp;
//   }
// }

void InsertionSort(int a[], int size) {
  int i, j;
  for (i = 0; i < size; i++) {
    int min = i;
    for (j = i + 1; j < size; j++) {
      if (a[j] < a[min]) {
        min = j;
      }
    }
    if (min != i) {
      int temp = a[i];
      a[i] = a[min];
      a[min] = temp;
    }
  }
}
int main() {
  int a[20], size, i;
  printf("\nEnter arry size: ");
  scanf("%d", &size);
  for (i = 0; i < size; i++) {
    printf("Enter value: ");
    scanf("%d", &a[i]);
  }
  printf("\nInput Array: ");
  for (i = 0; i < size; i++) {
    printf("%d ", a[i]);
  }
  InsertionSort(a, size);
  printf("\nSorted Array: ");
  for (i = 0; i < size; i++) {
    printf("%d ", a[i]);
  }
  return 0;
}
