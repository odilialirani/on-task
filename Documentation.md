On-Task: Task Management System
Description:
	This web app will help teams/individuals get on track with their projects/tasks. Users will be able to add different projects/tasks they're doing, and each project/task have different components in it, such as checkpoints to be done on certain dates.
	These components, if not checked on the deadlines, will trigger an e-mail reminder to the user to motivate the user to finish the component.


Usage Scenario:
 For example, for project lab 3 in CS 252, there are different checkpoints that are due on different dates. Users can then add these checkpoints with smaller tasks building up to finishing that checkpoints, with each task having an option of having deadlines attached on them.
	Part 1 of lab 3 is Lex/Yacc, assigned on Sept 10th. Users can put in  "Part 1" as the first checkpoint, with deadline on Sept 26th, 11:59pm. Then, s/he can put in subtasks such as: "Adding more tokens", "Add more parser rules", etc.


--------o----------o----------1---------o---------o---------2-------o------o------3------o-------DONE
    Add more    Add more    Part 1   Command     File    Part 2   Ctrl-C  Exit  Part 3  Extra
     tokens   parser rules           processing  redir                                  Credits



Features:
- Project creation
- Add different checkpoints and their dates
		- Differentiate between major checkpoints (e.g. Part 1, Part 2, Part 3, DONE) and subtasks (Add more tokens, File redir)
- Make mechanisms to shift dates
- Create reminder e-mail mechanisms
- Add different users for one project for delegating different parts

