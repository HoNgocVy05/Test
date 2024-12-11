#include <iostream>
#include <stack>
using namespace std;

int stackk(int a, int b)
{
     if (b == 0)
        return 1; // Số bất kỳ mũ 0 đều bằng 1
    else if (b==1)
        return a;
    else if (b < 0)
        return 1 / stackk(a, -b); // Xử lý số mũ âm
    else
        return a * stackk(a, b - 1); // Đệ quy nhân với chính nó
}
int main()
{
    cout << "S = " << stackk(2,6);

    return 0;
}