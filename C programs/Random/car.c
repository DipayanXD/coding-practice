#include <graphics.h>
#include <stdio.h>

void draw_moving_car() {
    int i, gd = DETECT, gm;
    initgraph(&gd, &gm, NULL);

    for (i = 0; i <= 420; i += 10) {
        setcolor(RED);
        // Draw the car body
        line(50 + i, 300, 150 + i, 300);
        line(50 + i, 300, 75 + i, 270);
        line(75 + i, 270, 125 + i, 270);
        line(125 + i, 270, 150 + i, 300);
        // Draw the wheels
        circle(75 + i, 330, 15);
        circle(125 + i, 330, 15);
        delay(100);
        cleardevice();
    }

    getch();
    closegraph();
}

int main() {
    draw_moving_car();
    return 0;
}

