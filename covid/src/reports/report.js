import React from 'react';

const Reports=({ reports }) => {
    return(
        <div>
            {reports.map((report)=>(
                <div>
                    <p>{report.country}</p>
                </div>
            ))}
        </div>
    )
};
export default Reports