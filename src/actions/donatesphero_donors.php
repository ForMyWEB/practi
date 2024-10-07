<?php
// session_start();
require_once __DIR__ . '/../helpers.php';

$limit = 6; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$pdo = getPDO();

$query = "SELECT name, IFNULL(sum, altsum) AS amount, date FROM donatesphero ORDER BY date DESC LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);

try {
    $stmt->execute();
    $donors = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die($e->getMessage());
}

$totalQuery = "SELECT COUNT(*) as total FROM donatesphero";
$totalStmt = $pdo->prepare($totalQuery);

try {
    $totalStmt->execute();
    $totalDonors = $totalStmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (Exception $e) {
    die($e->getMessage());
}

$totalPages = ceil($totalDonors / $limit);

function createPaginationLinks($totalPages, $currentPage) {
    $links = '';


    if ($currentPage > 1) {
        $prevPage = $currentPage - 1;
        $links .= '<li><a class="page-link" href="?page=' . $prevPage . '"><i class="fa-solid fa-arrow-left"></i></a></li>';
    } else {
        $links .= '<li class="disabled"><span class="page-link"><i class="fa-solid fa-arrow-left"></i></span></li>';
    }


    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            $links .= '<li class="active disabled"><span class="page-link">' . $i . '</span></li>';
        } else {
            $links .= '<li><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }
    }


    if ($currentPage < $totalPages) {
        $nextPage = $currentPage + 1;
        $links .= '<li><a class="page-link" href="?page=' . $nextPage . '"><i class="fa-solid fa-arrow-right"></i></a></li>';
    } else {
        $links .= '<li class="disabled"><span class="page-link"><i class="fa-solid fa-arrow-right"></i></span></li>';
    }

    return $links;
}
?>
