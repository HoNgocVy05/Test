#include <bits/stdc++.h>
#include <set>
#include <map>
using namespace std;

int main()
{
    map<int, int> m;
    m[100] = 200;


    cout << m.size() << endl;

    for (auto it:m)
        cout << it.first << " " << it.second << endl;

    return 0;
}

 
 
