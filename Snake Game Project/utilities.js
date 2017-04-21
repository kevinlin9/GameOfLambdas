function getRandomInteger(lower, upper)
{
	if (lower > upper)
	{
		return null;
	}

	var multiplier = upper - lower + 1;
		
	var rnd = parseInt(Math.random() * multiplier) + lower;
	
	return rnd;
}

function getNumberSuffix(number)
{
	if (number == 11 || number == 12)
	{
		return "th";
	}
	else
	{
		if (number % 10 == 1)
		{
			return "st"
		}
		else
		{
			if (number % 10 == 2)
			{
				return "nd"
			}
			else
			{
				if (number % 10 == 3)
				{
					return "rd";
				}
				else
				{
					return "th";
				}
			}
		}
		
	}
}

function generateRandomColor()
{
	redValue = parseInt(Math.random() * 256);
	greenValue = parseInt(Math.random() * 256);
	blueValue = parseInt(Math.random() * 256);
	randColor = "rgb(" + redValue + ", " + greenValue + ", " + blueValue + ")";
}