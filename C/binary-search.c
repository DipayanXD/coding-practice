#include <stdio.h>

int main() {
  int arr[100], n, i, key, found, high, mid, low;
  printf("Enter the number of element: ");
  scanf("%d", &n);
  printf("Enter the sorted elements: ", n);
  for (i = 0; i < n; i++)
    scanf("%d", &arr[i]);
  printf("Enter the element to search: ");
  scanf("%d", &key);
  low = 0;
  high = n - 1;
  found = 0;
  while (low <= high) {
    mid = (low + high) / 2;
    if (arr[mid] == key) {
      printf("Element %d is found at: %d", key, mid + 1);
      found = 1;
      break;
    } else if (arr[mid] < key) {
      low = mid + 1;
    } else {
      high = mid - 1;
    }
  }
  if (!found)
    printf("Element is not found");
  return 0;
}
