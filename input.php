<h2 class="header"> For UX test input </h2>
<form data-bind="submit: addTask">
Ajukan Ide: <input data-bind="value: newTaskText" required="harus di isi" placeholder="Apa yang harus ditambahkan di website ini?" />
<button type="submit">Add</button>
</form>
<ul data-bind="foreach: tasks, visible: tasks().length > 0">
<li>
<input type="checkbox" id="myCheckbox" class="filled-in" data-bind="checked: isDone" /><label  for="myCheckbox"></label>
<input data-bind="value: title, disable: isDone" />
<a href="#" data-bind="click: $parent.removeTask"><i class="medium material-icons">delete</i></a>
</li>
</ul>
You have <b data-bind="text: incompleteTasks().length">&nbsp;</b> incomplete idea
<span data-bind="visible: incompleteTasks().length == 0"> - <i class="material-icons">markunread_mailbox</i></span>
<? for($a = 1; $a<=2; $a++)
{
   echo '<br />';
}?>
<i class="material-icons">assignment_ind</i>Puji Ermanto<br /> 
<i class="material-icons">work</i>Front-End Web Developer
