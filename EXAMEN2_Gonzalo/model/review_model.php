<?php

namespace model;

class review_model
{
    public function getReview($conexion, $idReview)
    {
        $query = "SELECT * FROM review WHERE idreview = $idReview";
        $result = $conexion->query($query);
        $review = $result->fetch_assoc();
        return $review;
    }
}
