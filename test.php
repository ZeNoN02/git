?>
<body>
<div class="container">
<br>
<br>
<select name="sauce" size="1">
    <option value="secret" name="secret">Mihai Eminescu</option>
  </select>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
		<div class="alert alert-success">
		</div>
		<thead>
			<tr>
				<th>Autor</th>
				<th>Denumirile</th>
				<th>Pret</th>
                <th>Selecteaza</th>
			</tr>
		</thead>
		
		<?php 
		$query=mysqli_query($conexiune, "select * from lib")or die(mysql_error());
		while($row=mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $row['0'] ?></td>
				<td><?php echo $row['1'] ?></td>
				<td><?php echo $row['2'] ?></td>
				<td><input name="selector[]" type="checkbox" value="<?php echo $id; ?>"> </td>	
			</tr>

            <script>
                 echo "<td>" . $row['']."</td>";
                console.log($row['2'])
             </script>
            
		    <?php
        } ?>	
        	<tr>
				<th>Lista cartilor Selectate
                <span id="val">Total: </span>
  <button onclick="calculate()">Run</button>
                </th>
                
			</tr>				 
		</tbody>
	</table>
	<br />				
</form>

</div>


</body>
</html>
