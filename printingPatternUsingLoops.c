#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>

int main() 
{
                   //it        was          n o t       that       e a s y 

    int n;
    scanf("%d", &n);
  	// Complete the code to print the pattern.
    int size = 2 * n - 1; // Determine the size of the grid
    int distance, value;

    // Outer loop for rows
    for (int i = 0; i < size; i++) {
        // Inner loop for columns
        for (int j = 0; j < size; j++) {
            // Start calculating the distance for the current element
            if (i < size - i) { // Distance from the top edge
                distance = i;
            } else {
                distance = size - i - 1; // Distance from the bottom edge
            }

            if (j < distance) { // Distance from the left edge
                distance = j;
            }

            if ((size - j - 1) < distance) { // Distance from the right edge
                distance = size - j - 1;
            }

            // Calculate the value
            value = n - distance;

            // Print the value for the current element
            printf("%d ", value);
        }
        // Move to the next row after printing all columns
        printf("\n");
    }
    return 0;
}
