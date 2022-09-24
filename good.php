<?php

/**
 * Please, improve this class and fix all problems.
 *
 * You can change the Tenant class and its methods and properties as you want.
 * You can't change the AccountingService behavior.
 * You can choose PHP 7 or 8.
 * You can consider this class as an Eloquent model, so you are free to use
 * any Laravel methods and helpers.
 *
 * What is important:
 * - design (extensibility, testability)
 * - code cleanliness, following best practices
 * - consistency
 * - naming
 * - formatting
 *
 * Write your perfect code!
 */

namespace App\Models;
use App\Services\AccountingService;

class Tenant{
    private $accountingService;
    private string $id;

    public function __construct($id){
        $this->id = $id;
        $this->accountingService = new AccountingService();
    }

    public function get_invoices($status)
    {
        $params = [
            'tenant_id' => $this->id,
            'status' => $status
        ];

        return $this->accountingService->getAllInvoices($params);
    }
}