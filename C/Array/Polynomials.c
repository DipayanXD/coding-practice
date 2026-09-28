#include <stdio.h>
#include <stdlib.h>
#include <math.h>

#define MAX 100

// --- Function Prototypes ---
int inputPoly(int p[]);
void displayPoly(int p[], int degree);
void resetPoly(int p[]);

// Question Specific Functions
void q1_addPolynomials();
void q2_subtractPolynomials();
void q3_findZeroCoeffs();
void q4_findLargestExp();
void q5_findLowestCoeff();
void q6_evaluatePoly();
void q7_comparePolys();
void q8_multiplyScalar();
void q9_deleteCoefficient();

// Helper calculation for Q6 & Q7
float calculateValue(int p[], int degree, float x);

int main() {
    int choice;
    while(1) {
        printf("\n==============================================\n");
        printf("      POLYNOMIAL OPERATIONS MENU\n");
        printf("==============================================\n");
        printf("1. Add two polynomials\n");
        printf("2. Subtract two polynomials\n");
        printf("3. Find 'zero-coeff' indices\n");
        printf("4. Find largest exponent and its coefficient\n");
        printf("5. Find lowest coefficient and its exponent\n");
        printf("6. Evaluate polynomial with value 'x'\n");
        printf("7. Compare multiple polynomials for given 'x'\n");
        printf("8. Multiply polynomial by a number\n");
        printf("9. Delete coefficient of given exponent\n");
        printf("0. Exit\n");
        printf("----------------------------------------------\n");
        printf("Enter Question Number (1-9) or 0 to Exit: ");
        scanf("%d", &choice);

        switch(choice) {
            case 1: q1_addPolynomials(); break;
            case 2: q2_subtractPolynomials(); break;
            case 3: q3_findZeroCoeffs(); break;
            case 4: q4_findLargestExp(); break;
            case 5: q5_findLowestCoeff(); break;
            case 6: q6_evaluatePoly(); break;
            case 7: q7_comparePolys(); break;
            case 8: q8_multiplyScalar(); break;
            case 9: q9_deleteCoefficient(); break;
            case 0: printf("Exiting...\n"); exit(0);
            default: printf("Invalid choice! Please enter 0-9.\n");
        }
    }
    return 0;
}

// --- Helper Functions ---

void resetPoly(int p[]) {
    for(int i = 0; i < MAX; i++) p[i] = 0;
}

int inputPoly(int p[]) {
    int degree;
    resetPoly(p);
    printf("Enter highest degree (max %d): ", MAX-1);
    scanf("%d", &degree);
    if (degree >= MAX) degree = MAX - 1;
    
    // Input from highest degree down to 0
    for(int i = degree; i >= 0; i--) {
        printf("  Coef for x^%d: ", i);
        scanf("%d", &p[i]);
    }
    return degree;
}

void displayPoly(int p[], int degree) {
    int first = 1;
    printf("Polynomial: ");
    for(int i = degree; i >= 0; i--) {
        if(p[i] != 0) {
            if(!first && p[i] > 0) printf("+");
            printf("%dx^%d ", p[i], i);
            first = 0;
        }
    }
    if(first) printf("0"); // Case where all coeffs are 0
    printf("\n");
}

float calculateValue(int p[], int degree, float x) {
    float sum = 0;
    for(int i = 0; i <= degree; i++) {
        if(p[i] != 0) {
            sum += p[i] * pow(x, i);
        }
    }
    return sum;
}

// --- QUESTION IMPLEMENTATIONS ---

// 1. Add two polynomials
void q1_addPolynomials() {
    int p1[MAX], p2[MAX], res[MAX];
    printf("\n--- Q1: Add Two Polynomials ---\n");
    printf("Polynomial 1:\n");
    int d1 = inputPoly(p1);
    printf("Polynomial 2:\n");
    int d2 = inputPoly(p2);

    resetPoly(res);
    int maxD = (d1 > d2) ? d1 : d2;
    
    for(int i = 0; i <= maxD; i++) {
        res[i] = p1[i] + p2[i];
    }
    
    printf("Result ");
    displayPoly(res, maxD);
}

// 2. Subtract two polynomials
void q2_subtractPolynomials() {
    int p1[MAX], p2[MAX], res[MAX];
    printf("\n--- Q2: Subtract Two Polynomials (Poly1 - Poly2) ---\n");
    printf("Polynomial 1:\n");
    int d1 = inputPoly(p1);
    printf("Polynomial 2:\n");
    int d2 = inputPoly(p2);

    resetPoly(res);
    int maxD = (d1 > d2) ? d1 : d2;
    
    for(int i = 0; i <= maxD; i++) {
        res[i] = p1[i] - p2[i];
    }
    
    printf("Result ");
    displayPoly(res, maxD);
}

// 3. Find the 'zero-coeff's
void q3_findZeroCoeffs() {
    int p[MAX];
    printf("\n--- Q3: Find Zero Coefficients ---\n");
    int d = inputPoly(p);
    
    printf("Zero-coeffs of the given polynomial are at indices: ");
    int found = 0;
    for(int i = d; i >= 0; i--) {
        if(p[i] == 0) {
            printf("%d, ", i);
            found = 1;
        }
    }
    if(!found) printf("None");
    printf("\n");
}

// 4. Find largest exponent and its coefficient
void q4_findLargestExp() {
    int p[MAX];
    printf("\n--- Q4: Find Largest Exponent ---\n");
    int d = inputPoly(p);
    
    // Start from max degree and find first non-zero coeff
    for(int i = d; i >= 0; i--) {
        if(p[i] != 0) {
            printf("Largest Exponent: %d\n", i);
            printf("Coefficient: %d\n", p[i]);
            return;
        }
    }
    printf("Polynomial is empty/zero.\n");
}

// 5. Find lowest coefficient and its exponent
void q5_findLowestCoeff() {
    int p[MAX];
    printf("\n--- Q5: Find Lowest Coefficient ---\n");
    int d = inputPoly(p);
    
    // Initialize min with the coefficient of the highest degree
    int minCoeff = p[d];
    int minExp = d;
    
    for(int i = d; i >= 0; i--) {
        if(p[i] < minCoeff) {
            minCoeff = p[i];
            minExp = i;
        }
    }
    printf("Lowest Coefficient: %d\n", minCoeff);
    printf("At Exponent: %d\n", minExp);
}

// 6. Evaluate a polynomial
void q6_evaluatePoly() {
    int p[MAX];
    float x;
    printf("\n--- Q6: Evaluate Polynomial ---\n");
    int d = inputPoly(p);
    printf("Enter value for x: ");
    scanf("%f", &x);
    
    float val = calculateValue(p, d, x);
    printf("Result when x=%.2f is: %.2f\n", x, val);
}

// 7. Compare multiple polynomials
void q7_comparePolys() {
    int p[MAX];
    int count, bestIdx = -1;
    float x, maxVal = -9999999.0, currentVal;
    
    printf("\n--- Q7: Compare Multiple Polynomials ---\n");
    printf("How many polynomials to compare? ");
    scanf("%d", &count);
    printf("Enter value for x to evaluate against: ");
    scanf("%f", &x);
    
    for(int i = 1; i <= count; i++) {
        printf("\nEntry %d:\n", i);
        int d = inputPoly(p);
        currentVal = calculateValue(p, d, x);
        printf("-> Value: %.2f\n", currentVal);
        
        if(currentVal > maxVal) {
            maxVal = currentVal;
            bestIdx = i;
        }
    }
    
    printf("\nResult: Polynomial #%d is greater with value %.2f\n", bestIdx, maxVal);
}

// 8. Multiply a number to a polynomial
void q8_multiplyScalar() {
    int p[MAX];
    int scalar;
    printf("\n--- Q8: Multiply Polynomial by Number ---\n");
    int d = inputPoly(p);
    printf("Input number to multiply: ");
    scanf("%d", &scalar);
    
    for(int i = 0; i <= d; i++) {
        p[i] = p[i] * scalar;
    }
    
    printf("Output polynomial is: ");
    displayPoly(p, d);
}

// 9. Delete coefficient of given exponent
void q9_deleteCoefficient() {
    int p[MAX];
    int exp;
    printf("\n--- Q9: Delete Coefficient ---\n");
    int d = inputPoly(p);
    
    printf("Enter exponent to delete (coefficient becomes 0): ");
    scanf("%d", &exp);
    
    if(exp >= 0 && exp <= d) {
        p[exp] = 0;
        printf("Term x^%d deleted.\n", exp);
        
        // If we deleted the highest degree term, find new highest degree
        while(d > 0 && p[d] == 0) {
            d--;
        }
    } else {
        printf("Exponent out of range.\n");
    }
    
    printf("Resultant polynomial: ");
    displayPoly(p, d);
}
