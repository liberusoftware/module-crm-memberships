<?php

declare(strict_types=1);

namespace Liberu\CRM\Memberships\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $status @property float $price */
final class MembershipPlan extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_membership_plans';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['price' => 'decimal:2', 'metadata' => 'array'];
    }
}
