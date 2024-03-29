<table>
    <tr>
        <th>client</th>
        <th>user</th>
        <th>visit date</th>
        <th>start time</th>
        <th>end time</th>
        <th>visit purpose</th>
        <th>status</th>
        <th>note</th>
        <th>procedures</th>
    </tr>
    <?php foreach($bookData as $book):
        $a['id']=$book->client_id; 
        $clint = $clintData->first($a);
        $u['id'] = $book->user_id; 
        $user = $userData->first($u);
        
        ?>

    <tr>
        <td><?=$clint->name?></td>
        <td><?=$user->username?></td>
        <td><?=$book->visit_date?></td>
        <td><?=$book->start_time?></td>
        <td><?=$book->end_time?></td>
        <td><?=$book->visit_purpose?></td>
        <td><?=$status[$book->status]?></td>
        <td><?=$book->note?></td>
       <td>
        <a href="<?=ROOT?>/booking/edit/<?=base64_encode($book->id)?>">edit</a>
     
       </td>
    
    </tr>
    <?php endforeach; ?>
</table>