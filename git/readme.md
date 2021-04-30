## git commands

```$ git ls-remote origin```  
```$ git fetch origin```  
```$ git fetch origin feature/branch:feature/branch```  
```$ git show```  

#### new branch

```$ git checkout -b feature/branch```  
```$ git checkout -b feature/branch origin/feature/branch```  

#### remote list

```$ git remote```  
```$ git remote -v```  

#### remote branch

```$ git branch -r```  
```$ git branch -vv ```    
```$ git remote add [remote-name] [url]```  

#### tags

```$ git tag -a v1.0 -m “v1.0”```  
```$ git tag v1.0 ```  

#### logs

```$ git log --pretty=oneline```  

#### reset local repository

```$ git fetch origin```  
```$ git reset --hard origin/master```  

#### git config

```$ git config core.fileMode false```    
```$ git config core.autocrlf```  
```$ git config core.autocrlf true```  

#### last edit

```$ git commit --amend --no-edit```

#### remove from public repository

```$ git rm --cached -r folder/name/of/file```  
