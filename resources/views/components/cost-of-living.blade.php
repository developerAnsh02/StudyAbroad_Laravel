<section class="cost-living-section">
    <div class="tuition-container">
    <div class="left">
    <h2>{{ $ukCostOfLiving['heading'] }}</h2>
    <p>{{ $description }}</p>
    <p>{{ $ukCostOfLiving['description'] }}</p>

    <div class="info-highlight">
    <p>
            Aside from tuition fees, a student also has to plan for
            <strong>accommodation ({{ $ukCostOfLiving['highlights']['accommodation'] }})</strong>,
            <strong>food ({{ $ukCostOfLiving['highlights']['food'] }})</strong>, and
            <strong>transportation ({{ $ukCostOfLiving['highlights']['transportation'] }})</strong>.
        </p>
        <p>
            <strong>{{ $ukCostOfLiving['highlights']['consultancy'] }}</strong> {{ $ukCostOfLiving['highlights']['note'] }}
        </p>
    </div>
</div>


        <div class="right">
            <div class="tuition-box">
                <h3 class="category-title">Annual Tuition Fees (GBP)</h3>
                <div class="tuition-table-wrapper">
                    <table class="tuition-table">
                        <thead>
                            <tr>
                                <th>Course Type</th>
                                <th>Tuition Fees</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tuitionFees as $fee)
                                <tr>
                                    <td>{{ $fee['label'] }}</td>
                                    <td>{{ $fee['value'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .cost-living-section {
        background: #f9fafb;
        padding: 60px 20px;
        color: #1f2937;
        overflow-x: hidden;
    }

    .tuition-container {
        max-width: 1200px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: space-between;
        align-items: center;
    }

    .left, .right {
        flex: 1 1 48%;
        min-width: 300px;
    }

    .right {
        display: flex;
        justify-content: center;
    }

    .tuition-box {
        background-color: #fff;
        border-radius: 12px;
        padding: 25px 30px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
        width: 100%;
        transition: all 0.3s ease;
    }

    .tuition-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .category-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #1e293b;
        text-align: center;
    }

    .tuition-table-wrapper {
        overflow-x: auto;
    }

    .tuition-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 15px;
        min-width: 300px;
    }

    .tuition-table th,
    .tuition-table td {
        text-align: left;
        padding: 12px 15px;
        border-bottom: 1px solid #e5e7eb;
        word-break: break-word;
    }

    .tuition-table th {
        background-color: #f3f4f6;
        font-weight: 600;
        color: #1f2937;
    }

    .tuition-table tr:nth-child(even) {
        background-color: #f9fafb;
    }

    .tuition-table td {
        color: #374151;
    }

    .info-highlight {
        margin-top: 25px;
        background: #fff8e1;
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid #fbbf24;
        font-size: 15px;
        color: #1f2937;
        animation: fadeIn 0.6s ease;
    }

    .info-highlight p {
        font-size: 0.9rem;
        margin: 0 0 10px 0;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .left h2 {
            font-size: 1.7rem;
        }

        .tuition-box {
            padding: 20px;
        }
    }

    @media (max-width: 768px) {
        .tuition-container {
            flex-direction: column;
            gap: 20px;
        }

        .left,
        .right {
            flex: 1 1 100%;
        }

        .left h2 {
            font-size: 1.5rem;
        }

        .category-title {
            font-size: 16px;
        }

        .info-highlight {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .left h2 {
            font-size: 1.3rem;
        }

        .tuition-box {
            padding: 15px;
        }

        .tuition-table th,
        .tuition-table td {
            padding: 10px 8px;
            font-size: 14px;
        }

        .info-highlight {
            padding: 15px;
        }
    }
    @media (max-width: 320px) {
    .cost-living-section {
        padding: 40px 15px;
    }

    .left h2 {
        font-size: 1.1rem;
    }

    .info-highlight {
        padding: 12px;
        font-size: 13px;
        width: 95%;
    }

    .info-highlight p {
        font-size: 0.75rem;
    }

    .tuition-box {
        padding: 12px;
        width: 95%;
        margin: auto;
    }

    .tuition-table th,
    .tuition-table td {
        padding: 8px 6px;
        font-size: 13px;
    }

    .category-title {
        font-size: 15px;
    }
}

</style>
