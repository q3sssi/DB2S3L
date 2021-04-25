const btn = document.querySelector('#btn');
btn.onclick = function () 
{
	const rbs = document.querySelectorAll('input[name="tournament"]');
	let selectedValue;
	for (const rb of rbs) 
	{
		if (rb.checked) 
		{
			selectedValue = rb.value;
			break;
		}
	}
	if(typeof selectedValue === 'undefined')
	{
		alert('Choose the tournament!');
	}
	else
	{
		alert('You have successfully registered for the ' + selectedValue);
	}
};
