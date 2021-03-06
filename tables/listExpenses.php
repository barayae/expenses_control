<?php
include ("../controlers/expenseReport-controler.php");

$action = $_GET['action']?$_GET['action']:$_POST['action'];
$expenseId = $_GET['expId']?$_GET['expId']:$_POST['expId'];
$userId = $_GET['userId']?$_GET['userId']:$_POST['userId'];


if ($action =='list'){
	//var_dump(getExpenses($_POST["ExpenseCustomId"]));
	echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
}

else if ($action =='delete'){
  echo deleteLine($_POST['idExpenseReport']);
}

else if ($action =='create'){
  //if (!isset($_POST["Billable"])){$_POST["Billable"]=0}
  echo newExpense($_POST['ExpenseCustomId'], $_POST['Name'], $_POST['Billable'], $_POST['Department'], $_POST['Proyect'], $_POST['CreationDate'], $_POST['StartDate'], $_POST['EndDate'], $_POST['ReportDetail'], $_POST['CashAdvance'], $_POST['Refund'], $_POST['EmployeeId'], $_POST['SupervisorId'], $_POST['ExpenseStatusId']);
}

else if ($action =='update'){
  echo modifyExpense($_POST['idExpenseReport'], $_POST['Name'], $_POST['Billable'], $_POST['Department'], $_POST['Proyect'], $_POST['CreationDate'], $_POST['StartDate'], $_POST['EndDate'], $_POST['ReportDetail'], $_POST['CashAdvance'], $_POST['Refund'], $_POST['EmployeeId'], $_POST['SupervisorId'], $_POST['ExpenseStatusId']);
}

else if ($action =='listIds'){

	$aResult = array();
	$list = getExpenseIds();
	if(empty($list)) {
       $aResult['error'] = 'Empty Data';
   	}
   	else {
       $aResult['result'] = $list;
   	}
    echo json_encode($aResult);
}

else if ($action =='listDep'){

	$aResult = array();
	$list = getDepartments();
	if(empty($list)) {
       $aResult['error'] = 'Empty Data';
   	}
   	else {
       $aResult['result'] = $list;
   	}
    echo json_encode($aResult);
}

else if ($action =='expenseInfo'){

  $aResult = array();
  //echo $action;
  $list = getSpecificExpense($expenseId);
  if(empty($list)) {
       $aResult['error'] = 'Empty Data';
    }
    else {
       $aResult = $list;
    }
    echo json_encode($aResult);
}

else if ($action =='listIdsByUser'){

  $aResult = array();
  $list = getExpenseIdsByUsers($userId);
  if(empty($list)) {
       $aResult['error'] = 'Empty Data';
    }
    else {
       $aResult['result'] = $list;
    }
    echo json_encode($aResult);
}

else if ($action =='listIdsBySupervisor'){

  $aResult = array();
  $list = getExpenseIdsBySupervisor($userId);
  if(empty($list)) {
       $aResult['error'] = 'Empty Data';
    }
    else {
       $aResult['result'] = $list;
    }
    echo json_encode($aResult);
}



// switch ($action) {
// 	case 'list':
// 		echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 		break;
//
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'delete':
// 			echo echo deleteLine($_POST['idExpenseReport']);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
// 		case 'list':
// 			echo getExpenses($_POST["ExpenseCustomId"],$_POST["EmployeeId"],$_POST["Department"],$_POST["ExpenseStatusId"],$_POST["BillableExpense"]);
// 			break;
//
// }

?>
