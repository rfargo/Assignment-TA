<!DOCTYPE html>
<html>
<head>
	<title>Laravel exercise</title>
</head>
<body>
	<table>
		<th>
			<td>Name</td>
			<td>Email</td>
		</th>
		
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($user->name); ?></td>
			<td><?php echo e($user->email); ?></td>
			<td><a href="/user/<?php echo e($user->id); ?>">Detail</a></td>
			<td><a href="/user/<?php echo e($user->id); ?>/edit">Edit</a></td>
			<td><a href="/user/<?php echo e($user->id); ?>/delete">Delete</a></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html>