# How to contribute

ToDo & Co TodoList Application is a collaborative project.

Follow those steps to help and contribute coorectly to this project.

## Necessary to contribute
You should have a minimum experience with :

- [Git][1]
- [PHPunit][2]

## Instructions
### 1. Fork this repository
A *fork* is a copy of a repository. Forking a repository lets you to make changes to your copy without affecting any of the original code.

Fork main branch of this project to your GitHub account by clicking on the **Fork** button (top-right corner).

### 2. Clone your fork
A *clone* is a downloaded version of a repository. Cloning our fork lets you download a copy of the repository to your computer (local).

Clone the fork on your machine by this command line: \> git clone **your_fork_url** .

The . of git clone after fork url permit you to copy into current directory.

Your remote repo on GitHub is called origin.

Add the original repository as a remote called upstream with this command:

`git remote add upstream https://github.com/Kimealabs/toDoOCR.git`.

Now your local project has 2 remotes:

- **origin**: points to your GitHub fork of the project. You are able to read and write to this remote.
- **upstream**: points to main project repository. You're only able to read this remote.


### 3. Install project
Refer to [README.md][3] to install application.

### 4. Work on project

#### Create a new branch

Create a new branch to start to work with this command: `git checkout -b [prefix]/[name]`

Please use our conventional prefixes according to your contribution:

### Quick Legend

<table>
  <thead>
    <tr>
      <th>Instance</th>
      <th>Branch</th>
      <th>Description, Instructions, Notes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Stable</td>
      <td>main</td>
      <td>Accepts merges from Working and Hotfixes</td>
    </tr>
    <tr>
      <td>Working</td>
      <td>dev</td>
      <td>Accepts merges from Features/Issues and Hotfixes</td>
    </tr>
    <tr>
      <td>Features/Issues</td>
      <td>topic-*</td>
      <td>Always branch off HEAD of Working</td>
    </tr>
    <tr>
      <td>Hotfix</td>
      <td>hotfix-*</td>
      <td>Always branch off master</td>
    </tr>
  </tbody>
</table>

#### Pretty code, good code

- [PHP Standards Recommendations (PSR)][4]
- [Symfony Best Practices][5]

#### Tests

This project use unit and functional tests. To control if yours contribution are well, please run tests often.
You can create your own tests but only One rule => do not decrease the code coverage.


### 5. Create a pull request

You can push your work to your fork with this command : \> git push origin [branch]

Next, open a pull request (PR), explain clearly the subject and the description of your work into PR, you can tag some issues references with \#

You can create your PR ! Choose your target branch.


## Resources

[1]: https://git-scm.com/downloads
[2]: https://phpunit.de
[3]: https://github.com/Kimealabs/toDoOCR/blob/main/README.md
[4]: https://www.php-fig.org/psr
[5]: https://symfony.com/doc/5.4/best_practices/index.html

## Thanks to contribute, sharing is a better world ! 
