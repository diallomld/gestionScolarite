1_Formulaire d'admission
2_Inscription(annee academique,filiere, niveau,groupe(classe))
3_Badge(photo,classe,annee,numero)
4_Gestion des parcours(l'annee acad, filiere,niveau, UE(Ec), Enseignant)
5_Enseignant(cv, matiere)
6_Profil personnel Administratif(cv, poste, authorisation)
7_Les evaluations(saisie de note)
8_Payement(inscription, scloarite)
9_Resultats(releve note, atestation, stats, restriction)
10_SOUTENANCE(Deliberation + GED)

Nom de domaine: sgap-akademia.com

23h35-1h35



Maharishi International University
Fairfield, Iowa, USA
Computer Professionals Program
Master of Science in Computer Science Cooperative Program
Applicant Information Form

Mamadou Lamine Diallo logged on
Applicant ID: 370119
This exam and all related materials are private copyrighted material and the intellectual property of M.I.U. and are provided solely for individual use on this admissions pre-test. They are not to be copied or further distributed without written permission from M.I.U.

The purpose of this short test is to assess your ability to solve elementary programming problems in a language of your choice. Write your solutions in Java if you are familiar with that language; otherwise use one of these languages: C, C++, or C#. If you do not have access to a compiler for your language, write your answers in a text editor such as notepad and mention in a comment that you did not use a compiler.

For each of the problems below, write the simplest, clearest solution you can, in the form of a short program. Answer as much as you can for a problem, even if you do not have the complete answer.

If you are using C or C++ and the function you are writing requires an array parameter then you will also have to have a parameter that is the length of the array. This is not necessary in C# or Java since an array is an object in those languages and has a length method that returns the length of the array.

You do not need to do any I/O, i.e., you can hard-code your input data and do not have to write out anything to the console. Keep it simple! We are primarily interested in what you write in the body of the function. However, please be sure that your solution will work for all valid input data.

The clock is ticking now, so you don't have time to ask for clarifications on any of the questions. If something is not clear to you, resolve it yourself and state in a comment in the program what was unclear and how you resolved it.

When you have finished an answer, copy and paste it into the text box associated with the question and click the submit button to save it in our database. If you change an answer and submit it again, the previous version of the answer will be overwritten with the new version.

 

1 An array is defined to be stepped if it is in ascending order and there are 3 or more occurrences of each distinct value in the array. Note that ascending order means a[n]<=a[n+1]. It does not mean a[n] (this is strictly ascending). Write a function named isStepped that returns 1 if its array argument is stepped, otherwise return 0.

If you are programming in Java or C#, the signature is
int isStepped(int[ ] a)

If you are programming in C or C++, the signature is
int isStepped(int a[ ], int len) where len is the number of elements in the array.

Examples

If the array is	return	reason
{1, 1, 1, 5, 5, 5, 5, 8, 8, 8}	1	It is in ascending order. The distinct values of the array are 1, 5, 8 and there are three or more occurrences of each of these values.
{1, 1, 5, 5, 5, 5, 8, 8, 8}	0	Even though it is in ascending order, there are only two occurrences of the value 1.
{5, 5, 5, 15}	0	Even though it is in ascending order, there is only one occurrence of the value 15.
{3, 3, 3, 2, 2, 2, 5, 5, 5}	0	It is not in ascending order
{3, 3, 3, 2, 2, 2, 1, 1, 1}	0	It is not in ascending order
{1, 1, 1}	1	It is in ascending order and there are three or more occurrences of each distinct value. In this case there is only one distinct value.
{1, 1, 1, 1, 1, 1, 1}	1	It is in ascending order and there are three or more occurrences of each distinct value. In this case there is only one distinct value.
Copy and paste your answer here and click the "Submit answer" button





You should see a confirmation popup after hitting the submit button above.
 
2. Define an array to be a 121 array if all elements are either 1 or 2 and it begins with one or more 1s followed by a one or more 2s and then ends with the same number of 1s that it begins with. Write a method named is121Array that returns 1 if its array argument is a 121 array, otherwise, it returns 0.

There is one additional requirement. You should return 0 as soon as it is known that the array is not a 121 array; continuing to analyze the array would be a waste of CPU cycles.

If you are programming in Java or C#, the function signature is
int is121Array(int[ ] a)

If you are programming in C or C++, the function signature is
int is121Array(int a[ ], int len) where len is the number of elements in the array a.

Examples

a is	then function returns	reason
{1, 2, 1}	1	because the same number of 1s are at the beginning and end of the array and there is at least one 2 in between them.
{1, 1, 2, 2, 2, 1, 1}	1	because the same number of 1s are at the beginning and end of the array and there is at least one 2 in between them.
{1, 1, 2, 2, 2, 1, 1, 1}	0	Because the number of 1s at the end does not equal the number of 1s at the beginning.
{1, 1, 2, 1, 2, 1, 1}	0	Because the middle does not contain only 2s.
{1, 1, 1, 2, 2, 2, 1, 1, 1, 3}	0	Because the array contains a number other than 1 and 2.
{1, 1, 1, 1, 1, 1}	0	Because the array does not contain any 2s
{2, 2, 2, 1, 1, 1, 2, 2, 2, 1, 1}	0	Because the first element of the array is not a 1.
{1, 1, 1, 2, 2, 2, 1, 1, 2, 2}	0	Because the last element of the array is not a 1.
{2, 2, 2}	0	Because there are no 1s in the array.

Hint: Make sure that your solution handles all the above examples correctly!

Copy and paste your answer here and click the "Submit answer" button





You should see a confirmation popup after hitting the submit button above.
 
3. Define an array to be a Martian array if the number of 1s is greater than the number of 2s and no two adjacent elements are equal. Write a function named isMartian that returns 1 if its array argument is a Martian array, otherwise it returns 0.

There are two additional requirements.

You should return 0 as soon as it is known that the array is not a Martian array; continuing to analyze the array would be a waste of CPU cycles.

There should be exactly one for loop in your function

If you are programming in Java or C#, the function signature is
int isMartian(int[ ] a)

If you are programming in C or C++, the function signature is
int isMartian(int a[ ], int len) where len is the number of elements in the array a.

Examples

a is	then function returns	reason
{1, 3}	1	There is one 1 and zero 2s, hence the number of 1s is greater than the number of 2s. Also, no adjacent elements have the same value (1 does not equal 3)
{1, 2, 1, 2, 1, 2, 1, 2, 1}	1	There are five 1s and four 2s, hence the number of 1s is greater than the number of 2s. Also, no two adjacent elements have the same value.
{1, 3, 2}	0	There is one 1 and one 2, hence the number of 1s is not greater than the number of 2s.
{1, 3, 3, 2, 1}	0	There are two 3s adjacent to each other.
{1, 2, -18, -18, 1, 2}	0	The two -18s are adjacent to one another. Note that the number of 1s is not greater than than the number of 2s but your method should return 0 before determining that! (See the additional requirements above.)
{}	0	There are zero 1s and zero 2s hence the number of 1s is not greater than the number of 2s.
{1}	1	There is one 1 and zero 2s hence the number of 1s is greater than the number of 2s. Also since there is only one element, there cannot be adjacent elements with the same value.
{2}	0	There are zero 1s and one 2 hence the number of 1s is not greater than the number of 2s.

Hint: Make sure that your solution does not exceed the boundaries of the array!

Copy and paste your answer here and click the "Submit answer" button





You should see a confirmation popup after hitting the submit button above.

If you have submitted all three answers individually, you can click complete test button below.
Before you press complete test button, make sure that you have submitted all three answers individually and received a confirmation popup saying your answers for that question was successfully submitted.
Once you click the complete test button, you can not modify or update your answers.

Vous en souhaitant bonne réception et restant à votre disposition pour tout complément
d'information,

