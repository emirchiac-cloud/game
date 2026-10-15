<?php


require_once __DIR__ . '/________/autoload.php';

// Step 1: Student information
$schoolName = 'Sunshine School';
$studentName = 'John Brown';
$studentID = 'ST001';
$reportDate = ________('Y-m-d');

// Step 2: Student grades
$subjects = ['Math', 'English', 'Science'];
$grades = [80, ________, 85];

$notes = 'Keep working hard!';

// Step 3: Create the PDF
$pdf = new ________('P', 'mm', 'A4', true, 'UTF-8');

$pdf->SetTitle('Student Report Card');
$pdf->setPrintHeader(________);
$pdf->setPrintFooter(false);
$pdf->SetMargins(15, 15, 15);
$pdf->________();

// Step 4: Header
$pdf->SetFont('helvetica', 'B', 18);
$pdf->Cell(0, 10, $schoolName, 0, 1, '____');

$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, '______________', 0, 1, 'C');

$pdf->Ln(5);

// Step 5: Student information
$pdf->SetFont('helvetica', '', 11);
$pdf->Cell(90, 8, 'Student: ' . ________, 0, 0, 'L');
$pdf->Cell(90, 8, 'Student ID: ' . $studentID, 0, 1, '____');

$pdf->Cell(0, 8, 'Report Date: ' . $reportDate, 0, 1, 'L');

$pdf->Ln(5);

// Step 6: Grades table header
$pdf->SetFont('helvetica', '____', 11);

$pdf->Cell(100, 8, 'Subject', 1, 0, 'L');
$pdf->Cell(50, 8, '________', 1, 1, 'C');

// Step 7: Display the grades (no loop, one block per subject)
$pdf->SetFont('helvetica', '', 11);

$total = 0;

// Subject 1
$subject = $subjects[0];
$grade = $grades[0];
$total ________ $grade;
$pdf->Cell(100, 8, $subject, 1, 0, 'L');
$pdf->Cell(50, 8, $grade, 1, 1, 'C');

// Subject 2
$subject = $subjects[1];
$grade = $grades[1];
$total ________ $grade;
$pdf->Cell(100, 8, $subject, 1, 0, 'L');
$pdf->Cell(50, 8, $grade, 1, 1, 'C');

// Subject 3
$subject = $subjects[2];
$grade = $grades[2];
$total ________ $grade;
$pdf->Cell(100, 8, $subject, 1, 0, 'L');
$pdf->Cell(50, 8, $grade, 1, 1, 'C');

// Step 8: Calculate the average
$average = $total / ________($grades);

$pdf->Ln(4);

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(100, 10, 'Average Grade:', 0, 0, 'R');
$pdf->Cell(50, 10, ________($average, 2), 0, 1, 'C');

// Step 9: Notes section
$pdf->Ln(5);

$pdf->SetFont('helvetica', 'B', 11);
$pdf->Cell(0, 8, 'Teacher Notes:', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->________(0, 8, $notes, 0, 'L');

// Step 10: Footer message
$pdf->Ln(8);

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(0, 8, 'Keep up the good work!', 0, 1, 'C');

// Step 11: Output the PDF
$pdf->Output('report-card.pdf', '____');




// ANSWERS (Fill in the Blanks)

// -> vendor
// -> date
// -> 90
// -> TCPDF
// -> false
// -> AddPage
// -> C
// -> ______________ (divider/title text)
// -> $studentName
// -> R
// -> B
// -> Grade
// -> +=
// -> +=
// -> +=
// -> count
// -> number_format
// -> MultiCell
// -> I
// ============================================================
?>